<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Skills</th>
                <th>Educational Fields</th>
                <th>Experience</th>
                <th>Companies</th>
            </tr>
            <xsl:for-each select="jobs/job">
                <xsl:variable name="experience" select="experience" />
                <xsl:if test="$experience &lt; 2">
                    <tr style="background: yellow;"></tr>
                </xsl:if>
              
                <xsl:if test="$experience &gt;= 2">
                    <tr style="background: green;"></tr>
                </xsl:if>
                <td><xsl:value-of select="title"/></td>
                <td><xsl:value-of select="description"/></td>
                <td><xsl:for-each select="skills/skill">
                    <xsl:value-of select="."/>
                    <xsl:if test="position()!=last()">, </xsl:if>
                </xsl:for-each></td>
                <td><xsl:for-each select="educational_fields/field">
                    <xsl:value-of select="."/>
                    <xsl:if test="position()!=last()">, </xsl:if>
                </xsl:for-each></td>
                <td><xsl:value-of select="experience"/> years</td>
                <td><xsl:for-each select="companies/company">
                    <xsl:value-of select="."/>
                    <xsl:if test="position()!=last()">, </xsl:if>
                </xsl:for-each></td>
               
            </xsl:for-each>
        </table>
    </xsl:template>
</xsl:stylesheet>

